from sqlalchemy import Column, Integer, String
from sqlalchemy.orm import relationship
from app.data.conexion import Base


class Familia(Base):
    __tablename__ = "Familia"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    nombre_familia = Column(String(50))

    especies = relationship("Especie", back_populates="familia")