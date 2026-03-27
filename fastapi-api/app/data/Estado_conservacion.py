from sqlalchemy import Column, Integer, String
from sqlalchemy.orm import relationship
from app.data.db import Base


class EstadoConservacion(Base):
    __tablename__ = "Estado_Conservacion"

    ID = Column(Integer, primary_key=True, index=True, autoincrement=True)
    categoria = Column(String(50))

    especies = relationship("Especie", back_populates="estado_conservacion")