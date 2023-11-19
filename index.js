
class Pokemon {
    constructor(tipo, nombre){
        this.tipo = tipo;
        this.nombre = nombre;
    }
     saludar() {
        console.log('Hola, soy del tipo: ' + this.tipo + ' y mi nombre es el tipo: ' + this.nombre)        
    }
}

let pikachu = new Pokemon("electrico", "pikachu")
let saludo = pikachu.saludar();
console.log(saludo)