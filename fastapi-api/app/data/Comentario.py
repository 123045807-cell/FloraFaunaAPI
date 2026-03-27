from sqlalchemy import Column, Integer, Text, Date, ForeignKey
from sqlalchemy.orm import relationship
from app.data.db import Base


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