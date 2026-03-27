from sqlalchemy import Column, Integer, String
from sqlalchemy.orm import relationship
from app.data.conexion import Base


class Estatus(Base):
    __tablename__ = "Estatus"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    Estatus = Column(String(20))

    comentarios = relationship("Comentario", back_populates="estatus")