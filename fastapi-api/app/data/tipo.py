from sqlalchemy import Column, Integer, String
from sqlalchemy.orm import relationship
from app.data.conexion import Base


class Tipo(Base):
    __tablename__ = "Tipo"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    tipo = Column(String(50))

    especies = relationship("Especie", back_populates="tipo_rel")