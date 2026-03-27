from fastapi import Depends, HTTPException
from sqlalchemy.orm import Session
from app.data.db import get_db
from app.models.usuario import Usuario


#Crear verificación de ADMIN

def verificar_admin(user_id: int, db: Session = Depends(get_db)):
    usuario = db.query(Usuario).filter(Usuario.id == user_id).first()
    
    if not usuario or usuario.rol != "admin":
        raise HTTPException(status_code=403, detail="No tienes permisos de administrador")
    
    return usuario

#ADMIN USUARIOS
# Ver todos
@router.get("/")
def obtener_usuarios(db: Session = Depends(get_db), admin=Depends(verificar_admin)):
    return db.query(Usuario).all()

# Actualizar
@router.put("/{id}")
def actualizar_usuario(id: int, datos: UsuarioUpdate, db: Session = Depends(get_db), admin=Depends(verificar_admin)):
    usuario = db.query(Usuario).filter(Usuario.id == id).first()
    
    for key, value in datos.dict(exclude_unset=True).items():
        setattr(usuario, key, value)
    
    db.commit()
    return {"mensaje": "Usuario actualizado"}

# Eliminar
@router.delete("/{id}")
def eliminar_usuario(id: int, db: Session = Depends(get_db), admin=Depends(verificar_admin)):
    usuario = db.query(Usuario).filter(Usuario.id == id).first()
    db.delete(usuario)
    db.commit()
    return {"mensaje": "Usuario eliminado"}


#ADMIN ESPECIES
from fastapi import APIRouter, Depends
from sqlalchemy.orm import Session
from app.data.db import get_db
from app.models.especie import Especie
from app.schemas.especie import Especie as EspecieSchema, EspecieActualizar
from app.utils.admin import verificar_admin

router = APIRouter(prefix="/admin/especies", tags=["Admin Especies"])

@router.post("/")
def crear_especie(datos: EspecieSchema, db: Session = Depends(get_db), admin=Depends(verificar_admin)):
    nueva = Especie(**datos.dict())
    db.add(nueva)
    db.commit()
    return {"mensaje": "Especie creada"}

@router.get("/")
def obtener_especies(db: Session = Depends(get_db), admin=Depends(verificar_admin)):
    return db.query(Especie).all()

@router.put("/{id}")
def actualizar_especie(id: int, datos: EspecieActualizar, db: Session = Depends(get_db), admin=Depends(verificar_admin)):
    especie = db.query(Especie).filter(Especie.ID == id).first()
    
    for key, value in datos.dict(exclude_unset=True).items():
        setattr(especie, key, value)
    
    db.commit()
    return {"mensaje": "Especie actualizada"}

@router.delete("/{id}")
def eliminar_especie(id: int, db: Session = Depends(get_db), admin=Depends(verificar_admin)):
    especie = db.query(Especie).filter(Especie.ID == id).first()
    db.delete(especie)
    db.commit()
    return {"mensaje": "Especie eliminada"}

#ADMIN FOTOGRAFÍAS
router = APIRouter(prefix="/admin/fotografias", tags=["Admin Fotos"])

@router.post("/")
def agregar_foto(datos: FotoSchema, db: Session = Depends(get_db), admin=Depends(verificar_admin)):
    nueva = Fotografia(**datos.dict())
    db.add(nueva)
    db.commit()
    return {"mensaje": "Foto agregada"}

@router.delete("/{id}")
def eliminar_foto(id: int, db: Session = Depends(get_db), admin=Depends(verificar_admin)):
    foto = db.query(Fotografia).filter(Fotografia.ID == id).first()
    db.delete(foto)
    db.commit()
    return {"mensaje": "Foto eliminada"}

#ADMIN COMENTARIOS
router = APIRouter(prefix="/admin/comentarios", tags=["Admin Comentarios"])

# Ver comentarios
@router.get("/")
def obtener_comentarios(db: Session = Depends(get_db), admin=Depends(verificar_admin)):
    return db.query(Comentario).all()

# Eliminar comentario
@router.delete("/{id}")
def eliminar_comentario(id: int, db: Session = Depends(get_db), admin=Depends(verificar_admin)):
    comentario = db.query(Comentario).filter(Comentario.ID == id).first()
    db.delete(comentario)
    db.commit()
    return {"mensaje": "Comentario eliminado"}