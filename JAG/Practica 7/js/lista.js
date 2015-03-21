function Lista(){
	this.listaItems = [];
	this.posicion = 0;
	this.numeroItems = 0;
	this.filas = 1;
}

Lista.prototype.clear = function(){
	this.listaItems = [];
	this.posicion = this.numeroItems =0;	
}

Lista.prototype.agregar = function(item){	
	this.listaItems[this.numeroItems++] = item;
	this.posicion = this.numeroItems - 1;	
}

Lista.prototype.toString = function(){
	console.log(this.listaItems);
}

/*
*	Esta funcion devuelve el indice dentro de la lista del elemento item que se envia 
*	En caso de no encontrarlo devuelve un -1
*/
Lista.prototype.buscar = function(item){
	for (var i = 0; i < this.numeroItems; i++) {
		if (this.listaItems[i] == item) 
			return i;									
	}
	return -1;
}

Lista.prototype.contiene = function(item){
	var index = this.buscar(item);
	if (index >= 0)
		return true;
	return false;	
}

//Posicion actual 
Lista.prototype.posActual = function(){	
	return this.posicion;
}

//Avanzar el elemento
Lista.prototype.siguiente = function(){
	if (this.posicion != this.numeroItems - 1)
		return this.listaItems[++this.posicion];
	else 
		return this.listaItems[this.posicion];
}

//Retroceder el elemento
Lista.prototype.anterior = function(){
	if (this.posicion != 0)
		return this.listaItems[--this.posicion];
	else 
		return this.listaItems[this.posicion];
}

//Regresar el elemento
Lista.prototype.getElemento = function(item){
	return this.listaItems[item];				
}

//Primera posicion
Lista.prototype.inicio = function(){
	return this.listaItems[0];
}

//Ultima posicion 
Lista.prototype.ultimo = function(){
	var pos = this.numeroItems-1;
	return this.listaItems[pos];
}

//Eliminar 
Lista.prototype.eliminar = function(item){
	var index = this.buscar(item);
	if (index > -1){
		this.listaItems.splice(index,1);
		--this.numeroItems;
		return true;
	}
	return false;
}

Lista.prototype.moverA = function(item){
	if (item <= this.numeroItems-1 && item >= 0){
		this.posicion = item;
		return true;			
	}
	return true;	
}

Lista.prototype.dibujar = function(tabla){
	var fila = tabla.insertRow(this.filas);
	var columna = fila.insertCell(0);
	
	var input = document.createElement("input");
		input.type = "text"
		input.value = this.listaItems[this.numeroItems-1];

	columna.appendChild(input);
	this.filas++;
}