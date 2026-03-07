from fastapi import FastAPI

app = FastAPI(
    title= "API Flora y Fauna",
    description= "API para consultar información sobre flora y fauna",
    version="1.0"
)

@app.get("/")
def root():
    return {"mensaje": "API Flora y Fauna activa"}