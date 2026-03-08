from flask import Flask, render_template, session, redirect, url_for

app = Flask(__name__)

@app.route("/")
def inicio():
    return render_template("inicio.html")

# @app.route("/inicio_usuario")
# def inicio_usuario():
#     return render_template("inicio_usuario.html")


@app.route("/inicio_usuario")
def inicio_usuario():

    stats = {
        "flora": 0,
        "fauna": 0,
        "zonas": 0,
        "vulnerables": 0
    }

    fotos = {
        "fotografiadas": 0,
        "pendientes": 0
    }

    return render_template(
        "inicio_usuario.html",
        stats=stats,
        fotos=fotos
    )

@app.route("/login")
def login():
    return render_template("login.html")

@app.route("/registro")
def registro():
    return render_template("registro.html")

@app.route("/perfil")
def perfil():
    usuario = {
        "username": "Isabel",
        "profile_image": "isabel.png"
    }
    return render_template("perfil.html", usuario=usuario)

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

@app.route("/zona1")
def zona1():
    return render_template("zona1.html")

@app.route("/zona2")
def zona2():
    return render_template("zona2.html")

@app.route("/zona3")
def zona3():
    return render_template("zona3.html")

@app.route("/zona4")
def zona4():
    return render_template("zona4.html")

@app.route("/zona5")
def zona5():
    return render_template("zona5.html")

@app.route("/zona6")
def zona6():
    return render_template("zona6.html")

@app.route("/zona7")
def zona7():
    return render_template("zona7.html")

@app.route("/zona8")
def zona8():
    return render_template("zona8.html")

@app.route("/zona9")
def zona9():
    return render_template("zona9.html")

@app.route("/zona10")
def zona10():
    return render_template("zona10.html")

@app.route("/zona11")
def zona11():
    return render_template("zona11.html")

@app.route("/zona12")
def zona12():
    return render_template("zona12.html")

@app.route("/zona13")
def zona13():
    return render_template("zona13.html")

@app.route("/zona14")
def zona14():
    return render_template("zona14.html")

@app.route("/zona15")
def zona15():
    return render_template("zona15.html")

@app.route("/zona16")
def zona16():
    return render_template("zona16.html")

@app.route("/zona17")
def zona17():
    return render_template("zona17.html")

@app.route("/zona18")
def zona18():
    return render_template("zona18.html")

@app.route("/logout")
def logout():
    session.clear()
    return redirect(url_for("login"))

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000, debug=True)