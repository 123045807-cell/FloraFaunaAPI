from sqlalchemy import Column, Integer, String
from sqlalchemy.orm import relationship
from app.data.conexion import Base


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