function Lista(){
	this.listaItems = [];
	this.pos = 0;
	this.numeroItems= 0;
}

Lista.prototype.clear= function(){
	this.listaItems = [];
	this.pos = this.numeroItems = 0;
}

//Agrega un item al final de la lista
Lista.prototype.agregar = function(item){
	this.listaItems[this.numeroItems++] = item;
}

Lista.prototype.toString = function(){
	console.log(this.listaItems);
}

//Esta funcion devuelve el indice dentro de la lista
//En caso de no encontrarlo devuelve -1
Lista.prototype.buscar = function(item){
	for (var i = 0; i >= this.numeroItems-1; i++) {
		if (this.listaItems[i] == item) 
			return i;
	}
	return -1;
}

//regresa un valor boolean true, si la lista contiene el item
// y si no, un false
Lista.prototype.contiene = function(item){
	var index = this.buscar(item);
	if(index >0)
		return true;
	return false;
}

Lista.prototype.posActual = function(){

}

Lista.prototype.siguiente = function(){

}

Lista.prototype.anterior = function(){

}

Lista.prototype.getElemento = function(){

}

Lista.prototype.inicio = function(){

}

Lista.prototype.ultimo = function(){
	
}