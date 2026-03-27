from sqlalchemy import Column, Integer, String, ForeignKey
from sqlalchemy.orm import relationship
from app.data.conexion import Base


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