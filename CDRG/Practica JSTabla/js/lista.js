function Lista() { //Constructor de la función Lista
	this.listaItems = [];
	this.numeroItems = 0;
	this.listaPosicion = 0;
}

Lista.prototype.clear = function() { //Prototipo de la función
	this.listaItems = [];
	this.listaPosicion = this.numeroItems = 0;
}

Lista.prototype.agregar = function(item) { //Esta función agrega un elemento a la Lista
	this.listaItems[this.numeroItems++] = item;
	this.listaPosicion++;
}

Lista.prototype.toString = function() { //Esta función Imprime los elementos
	console.log(this.listaItems);
}

Lista.prototype.buscar = function(item) { //Esta función devuelve el índice el elemento que buscamos //si no lo encontramos devuelve -1
for (var i = 0; i < this.numeroItems ; i++) {
	if (this.listaItems[i] == item)
		return i;
}
	return -1;
}

Lista.prototype.eliminar = function(item) {
	var index = this.buscar(item);
	if (index  > -1) 
	{
		this.listaItems.splice(index,1);
		--this.numeroItems;
	}
	return false;
}
/*
* 	Regresa un valor Boolean true, si la lista
*   contiene el item, en caso contrario false
*/

Lista.prototype.contiene = function(item) { 
	var index = this.buscar(item);
	if (index >= 0)
		return true;
	return false;
}

//Regresa posicion Actual
Lista.prototype.posActual = function() {
	return this.listaPosicion;
}

Lista.prototype.siguiente = function() { 
	if (this.listaPosicion < this.numeroItems-1)
		return ++this.listaPosicion;
	else
		console.log("No existe un siguiente UnU");
}

Lista.prototype.anterior = function() { 
	if(this.listaPosicion != 0)
		return --this.listaPosicion;
	else
		console.log("No existe anterior UnU");
}

Lista.prototype.getElemento = function() { 
	return this.listaItems[this.listaPosicion];
}

Lista.prototype.moverA = function(index)
{
	if (index >= 0 && index < this.listaItems-1)
		this.listaPosicion = index;
	else	
		console.log("Ño existe :p");
}
Lista.prototype.inicio = function() {
	this.listaPosicion = 0;
}

Lista.prototype.ultimo = function() {
	this.listaPosicion = this.numeroItems -1;
}

Lista.prototype.dibujar = function(idbody) {
	var ele = document.getElementById("isBody");
	var tr = document.createElement('tr');
	ele.appendChild(tr);
	var td = document.createElement('td');
	tr.appendChild(td);
	var txt = document.createTextNode(this.listaItems[this.numeroItems-1]);
	td.appendChild(txt);

	
}