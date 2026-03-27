from sqlalchemy import Column, Integer, String
from sqlalchemy.orm import relationship
from app.data.db import Base


class Zona(Base):
    __tablename__ = "Zonas"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    nombre_region = Column(String(500), nullable=False)

    especies = relationship("Especie", back_populates="zona")
    consejos = relationship("Consejo", back_populates="zona_rel")
    comentarios = relationship("Comentario", back_populates="zona")