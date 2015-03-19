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
	for (i = 0; i >= this.numeroItems-1; i++){ 
		console.log("Entro al for " +i);
		if (this.listaItems[i] == item){ 
			return i;
			console.log("Entro al if" + i);
		}
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
	return this.pos;
}

Lista.prototype.siguiente = function(){
	if(this.pos < this.numeroItems)
		this.pos++;
	else
		console.log("Llego al final de la lista");
}

Lista.prototype.anterior = function(){
	if(this.pos > 0)
		this.pos--;
	else
		console.log("Llego al inicio de la lista");
}

Lista.prototype.getElemento = function(){
	return this.listaItems[this.pos];
}

Lista.prototype.inicio = function(){
	if(this.numeroItems > 0)
		this.pos = 0;
	else
		console.log("No hay nada en la lista");
}

Lista.prototype.ultimo = function(){
	if(this.numeroItems > 0)
		this.pos = this.numeroItems-1;
	else
		console.log("No hay nada en la lista");
}