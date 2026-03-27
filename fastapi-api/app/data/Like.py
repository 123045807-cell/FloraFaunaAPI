from sqlalchemy import Column, Integer, ForeignKey
from sqlalchemy.orm import relationship
from app.data.db import Base


class Like(Base):
    __tablename__ = "Likes"

    id = Column(Integer, primary_key=True, index=True, autoincrement=True)
    id_comentario = Column(Integer, ForeignKey("Comentario.ID"))
    id_usuario = Column(Integer, ForeignKey("Usuarios.id"))

    comentario = relationship("Comentario", back_populates="likes")
    usuario = relationship("Usuario", back_populates="likes")