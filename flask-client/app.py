from flask import Flask, render_template

app = Flask(__name__)

@app.route("/")
def inicio():
    return render_template("inicio.html")

@app.route("/inicio_usuario")
def inicio_usuario():
    return render_template("inicio_usuario.html")

@app.route("/login")
def login():
    return render_template("login.html")

@app.route("/registro")
def registro():
    return render_template("registro.html")

@app.route("/perfil")
def perfil():
    return render_template("perfil.html")

@app.route("/mapa")
def mapa():
    return render_template("mapa.html")

@app.route("/mapa2")
def mapa2():
    return render_template("mapa2.html")

@app.route("/consejos")
def consejos():
    return render_template("consejos.html")

@app.route("/comentarios")
def comentarios():
    return render_template("comentarios.html")

@app.route("/donaciones")
def donaciones():
    return render_template("donaciones.html")

@app.route("/donaciones2")
def donaciones2():
    return render_template("donaciones2.html")

@app.route("/membresias")
def membresias():
    return render_template("membresias.html")

@app.route("/admin/panel")
def admin_panel():
    return render_template("admiPanel.html")

@app.route("/admin/especies")
def admin_especies():
    return render_template("especiesAdmin.html")

@app.route("/admin/comentarios")
def admin_comentarios():
    return render_template("admin_comentarios.html")

@app.route("/admin/consejos")
def admin_consejos():
    return render_template("admin_consejos.html")

@app.route("/admin/usuarios")
def admin_usuarios():
    return render_template("usuarios.html")

@app.route("/admin/editar_especie")
def admin_editar_especie():
    return render_template("editar_especie.html")

@app.route("/admin/editar_rol")
def admin_editar_rol():
    return render_template("editar_rol.html")

@app.route("/zona1")
def zona1():
    return render_template("ZONA1.HTML")

@app.route("/zona2")
def zona2():
    return render_template("ZONA2.HTML")

@app.route("/zona3")
def zona3():
    return render_template("ZONA3.HTML")

@app.route("/zona4")
def zona4():
    return render_template("ZONA4.HTML")

@app.route("/zona5")
def zona5():
    return render_template("ZONA5.HTML")

@app.route("/zona6")
def zona6():
    return render_template("ZONA6.HTML")

@app.route("/zona7")
def zona7():
    return render_template("ZONA7.HTML")

@app.route("/zona8")
def zona8():
    return render_template("ZONA8.HTML")

@app.route("/zona9")
def zona9():
    return render_template("ZONA9.HTML")

@app.route("/zona10")
def zona10():
    return render_template("ZONA10.HTML")

@app.route("/zona11")
def zona11():
    return render_template("ZONA11.HTML")

@app.route("/zona12")
def zona12():
    return render_template("ZONA12.HTML")

@app.route("/zona13")
def zona13():
    return render_template("ZONA13.HTML")

@app.route("/zona14")
def zona14():
    return render_template("ZONA14.HTML")

@app.route("/zona15")
def zona15():
    return render_template("ZONA15.HTML")

@app.route("/zona16")
def zona16():
    return render_template("ZONA16.HTML")

@app.route("/zona17")
def zona17():
    return render_template("ZONA17.HTML")

@app.route("/zona18")
def zona18():
    return render_template("ZONA18.HTML")

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000, debug=True)