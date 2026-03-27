from sqlalchemy import Column, Integer, String, ForeignKey
from sqlalchemy.orm import relationship
from app.data.conexion import Base


class Fotografia(Base):
    __tablename__ = "Fotografia"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    url_imagen = Column(String(200))
    id_especie = Column(Integer, ForeignKey("Especies.ID"))

    especie = relationship("Especie", back_populates="fotografias")