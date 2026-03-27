from pydantic import BaseModel, EmailStr, Field
from typing import Optional

class UsuarioBase(BaseModel):
    nombre: str = Field(..., min_length=2, max_length=100)
    apellidoPaterno: str = Field(..., min_length=2, max_length=100)
    apellidoMaternousuarios: Optional[str] = Field(None, max_length=100)
    correo: EmailStr
    contrasena: str = Field(..., min_length=6, max_length=255)

class UsuarioCreate(UsuarioBase):
    pass

class UsuarioUpdate(BaseModel):
    nombre: Optional[str] = Field(None, min_length=2, max_length=100)
    apellidoPaterno: Optional[str] = Field(None, min_length=2, max_length=100)
    apellidoMaternousuarios: Optional[str] = Field(None, max_length=100)
    correo: Optional[EmailStr]
    contrasena: Optional[str] = Field(None, min_length=6, max_length=255)
