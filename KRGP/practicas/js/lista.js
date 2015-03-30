function Lista(){
	this.listaItems = [];
	this.numeroItems = 0;
	this.posicion=0;
}

Lista.prototype.clear = function(){
	this.listaItems = [];
	this.numeroItems = this.Posicion = 0;
}

Lista.prototype.agregar = function(item){
	this.listaItems[this.numeroItems++] = item;
}

Lista.prototype.toString = function(){
	console.log(this.listaItems);
}

/*
* Esta funcion devuelve el indice dentro de la lista
* en caso de no encontrarlo devuelve -1
*/
Lista.prototype.buscar =function(item){
	for(var i =0; i < this.numeroItems; i++){
		if(item == this.listaItems[i]){
			return i;
		}
	}
	return -1;
}

/*
* regresa un valor true, si la lista contiene el item
* en caso contrario regresa false
*/

Lista.prototype.contiene = function(item){
	var index = this.buscar(item);
	if(index >= 0)
		return true;
	return false;
}

Lista.prototype.posActual = function(){
	console.log(this.posicion);
}

Lista.prototype.siguiente = function(){
	if(this.posicion-1 != this.numeroItems && this.listaItems[this.posicion++] != null)
	this.getElemento();
}

Lista.prototype.anterior = function(){
	if(this.posicion!= 0 && this.listaItems[this.posicion--] != null)
	this.getElemento();
}

Lista.prototype.getElemento = function(){
	console.log(this.listaItems[this.posicion]);
}

Lista.prototype.inicio = function(){
	this.posicion = 0;
	this.getElemento();
}

Lista.prototype.ultimo = function(){
	this.posicion = this.numeroItems - 1;
	this.getElemento();
}

Lista.prototype.eliminar = function(item){
	var index = this.buscar(item);
	if(index > -1){
		this.listaItems.splice(index,1);
		--this.numeroItems;
		return true;
	}
	return false;
}

Lista.prototype.draw = function(ibody)
{
	var bodys = document.getElementById("ibody");
	var fila = document.createElement("tr");
	bodys.appendChild(fila);
	var columna = document.createElement("td");
	fila.appendChild(columna);
	var texto = document.createTextNode(this.listaItems[this.numeroItems-1]);
	columna.appendChild(texto);
}