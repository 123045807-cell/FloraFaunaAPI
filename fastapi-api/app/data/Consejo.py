from sqlalchemy import Column, Integer, String, Text, Date, Time, ForeignKey
from sqlalchemy.orm import relationship
from app.data.db import Base


class Consejo(Base):
    __tablename__ = "consejos"

    id = Column(Integer, primary_key=True, index=True, autoincrement=True)
    id_zona = Column(Integer, ForeignKey("Zonas.ID"), nullable=False)
    titulo = Column(String(300))
    consejo = Column(Text)
    fecha = Column(Date)
    hora = Column(Time)

    zona_rel = relationship("Zona", back_populates="consejos")