from fastapi import APIRouter, Depends, HTTPException
from sqlalchemy.orm import Session
from app.model.Usuario import Usuarios
from app.data.conexion import get_db

router = APIRouter(prefix="/usuarios", tags=["Usuarios"])


@router.get("/{id}")
def obtener_usuario(id: int, db: Session = Depends(get_db)):

    usuario = db.query(Usuarios).filter(Usuarios.id == id).first()

    if not usuario:
        raise HTTPException(status_code=404, detail="Usuario no encontrado")

    return usuario

@router.post("/")
def crear_usuario(usuario: crearUsuario, db: Session = Depends(get_db)):
    
    existe = db.query(Usuarios).filter(Usuarios.correo == usuario.correo).first()
    if existe:
        raise HTTPException(status_code=400, detail="El correo ya está registrado")
    
    nuevo_usuario = Usuarios(
        nombre=usuario.nombre,
        apellidoPaterno=usuario.apellidoPaterno,
        apellidoMaternousuarios=usuario.apellidoMaternousuarios,
        correo=usuario.correo,
        contrasena=usuario.contrasena
    )

    db.add(nuevo_usuario)
    db.commit()
    db.refresh(nuevo_usuario)

    return {
        "mensaje": "Usuario creado correctamente",
        "usuario": nuevo_usuario
    }

@router.put("/{id}")
def actualizar_usuario(id: int, datos: crearUsuario, db: Session = Depends(get_db)):

    usuario = db.query(Usuarios).filter(Usuarios.id == id).first()

    if not usuario:
        raise HTTPException(status_code=404, detail="Usuario no encontrado")

    usuario.nombre = datos.nombre
    usuario.apellidoPaterno = datos.apellidoPaterno
    usuario.apellidoMaternousuarios = datos.apellidoMaternousuarios
    usuario.correo = datos.correo
    usuario.contrasena = datos.contrasena

    db.commit()
    db.refresh(usuario)

    return {
        "mensaje": "Usuario actualizado completamente",
        "usuario": usuario
    }

@router.patch("/{id}")
def actualizar_parcial_usuario(id: int, datos: UsuarioAct, db: Session = Depends(get_db)):

    usuario = db.query(Usuarios).filter(Usuarios.id == id).first()

    if not usuario:
        raise HTTPException(status_code=404, detail="Usuario no encontrado")

    if datos.nombre is not None:
        usuario.nombre = datos.nombre

    if datos.apellidoPaterno is not None:
        usuario.apellidoPaterno = datos.apellidoPaterno

    if datos.apellidoMaternousuarios is not None:
        usuario.apellidoMaternousuarios = datos.apellidoMaternousuarios

    if datos.correo is not None:
        usuario.correo = datos.correo

    if datos.contrasena is not None:
        usuario.contrasena = datos.contrasena

    db.commit()
    db.refresh(usuario)

    return {
        "mensaje": "Usuario actualizado parcialmente",
        "usuario": usuario
    }

@router.delete("/{id}")
def eliminar_usuario(id: int, db: Session = Depends(get_db)):

    usuario = db.query(Usuarios).filter(Usuarios.id == id).first()

    if not usuario:
        raise HTTPException(status_code=404, detail="Usuario no encontrado")

    db.delete(usuario)
    db.commit()

    return {
        "mensaje": "Usuario eliminado correctamente"
    }