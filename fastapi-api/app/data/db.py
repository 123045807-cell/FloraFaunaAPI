from sqlalchemy import Column, Integer, String, Text, Date, Time, ForeignKey
from sqlalchemy.orm import relationship
from app.data.db import Base


class Tipo(Base):
    __tablename__ = "Tipo"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    tipo = Column(String(50))

    especies = relationship("Especie", back_populates="tipo_rel")


class Familia(Base):
    __tablename__ = "Familia"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    nombre_familia = Column(String(50))

    especies = relationship("Especie", back_populates="familia")


class EstadoConservacion(Base):
    __tablename__ = "Estado_Conservacion"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    categoria = Column(String(50))

    especies = relationship("Especie", back_populates="estado_conservacion")


class Zona(Base):
    __tablename__ = "Zonas"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    nombre_region = Column(String(500), nullable=False)

    especies = relationship("Especie", back_populates="zona")
    consejos = relationship("Consejo", back_populates="zona")
    comentarios = relationship("Comentario", back_populates="zona")


class Estatus(Base):
    __tablename__ = "Estatus"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    Estatus = Column(String(20))

    comentarios = relationship("Comentario", back_populates="estatus")


class Usuario(Base):
    __tablename__ = "Usuarios"

    id = Column(Integer, primary_key=True, index=True, autoincrement=True)
    nombre = Column(String(100))
    apellidoPaterno = Column(String(100))
    apellidoMaterno = Column(String(100))
    correo = Column(String(100), unique=True)
    contrasena = Column(String(255))
    rol = Column(String(20), default="usuario")

    comentarios = relationship("Comentario", back_populates="usuario")
    likes = relationship("Like", back_populates="usuario")


class Especie(Base):
    __tablename__ = "Especies"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    Nombre_comun = Column(String(100))
    nombre_cientifico = Column(String(100))
    tipo = Column(Integer, ForeignKey("Tipo.ID"))
    id_familia = Column(Integer, ForeignKey("Familia.ID"))
    id_zonas = Column(Integer, ForeignKey("Zonas.ID"))
    id_estado_conservacion = Column(Integer, ForeignKey("Estado_Conservacion.ID"))

    tipo_rel = relationship("Tipo", back_populates="especies")
    familia = relationship("Familia", back_populates="especies")
    zona = relationship("Zona", back_populates="especies")
    estado_conservacion = relationship("EstadoConservacion", back_populates="especies")
    fotografias = relationship("Fotografia", back_populates="especie")


class Fotografia(Base):
    __tablename__ = "Fotografia"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    url_imagen = Column(String(200))
    id_especie = Column(Integer, ForeignKey("Especies.ID"))

    especie = relationship("Especie", back_populates="fotografias")


class Consejo(Base):
    __tablename__ = "consejos"

    id = Column(Integer, primary_key=True, index=True, autoincrement=True)
    zona = Column(Integer, ForeignKey("Zonas.ID"), nullable=False)
    titulo = Column(String(300))
    consejo = Column(Text)
    fecha = Column(Date)
    hora = Column(Time)

    zona = relationship("Zona", back_populates="consejos")


class Comentario(Base):
    __tablename__ = "Comentario"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    Contenido = Column(Text)
    Fecha_publicacion = Column(Date)
    ID_usuario = Column(Integer, ForeignKey("Usuarios.id"))
    ID_zona = Column(Integer, ForeignKey("Zonas.ID"))
    ID_estatus = Column(Integer, ForeignKey("Estatus.ID"))

    usuario = relationship("Usuario", back_populates="comentarios")
    zona = relationship("Zona", back_populates="comentarios")
    estatus = relationship("Estatus", back_populates="comentarios")
    likes = relationship("Like", back_populates="comentario")


class Like(Base):
    __tablename__ = "Likes"

    id = Column(Integer, primary_key=True, index=True, autoincrement=True)
    id_comentario = Column(Integer, ForeignKey("Comentario.ID"))
    id_usuario = Column(Integer, ForeignKey("Usuarios.id"))

    comentario = relationship("Comentario", back_populates="likes")
    usuario = relationship("Usuario", back_populates="likes")