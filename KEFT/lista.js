function Lista(){
	this.listaItems = [];
	this.pos = 0;
	this.numeroItems = 0;
}

Lista.prototype.clear = function(){
	this.listaItems = [];
	this.numeroItems = this.pos = 0;
}

/*
* Esta funcion agregar el elemento item al final
*/

Lista.prototype.agregar = function(item){
	this.listaItems[this.numeroItems++] = item;
}

Lista.prototype.toString = function(){
	console.log(this.listaItems);
}

/*
* Esta funcion devuelve el indice dntro de la funcion en caso de no encontrarlo devuelve -1
*/

Lista.prototype.buscar = function(item){
	for(var i = 0; i <= this.numeroItems -1; i++){
		if(this.listaItems[i] == item)
			return i;
	}
	return -1;
}

/*
* Regresa un valor ture, si la lista contiene un item en caso contrario regresa false
*/

Lista.prototype.contiene = function(item){
	var index = this.buscar(item);
	if (index >= 0)
		return true;
	return false;
}

Lista.prototype.posActual = function(){
	return this.lista;
}

Lista.prototype.siguiente = function(){
	if(this.pos < this.numeroItems)
		return ++this.pos;
	else
		console.log("Error");
}

Lista.prototype.anterior = function(){
	if(this.pos > 0)
		return --this.pos;
	else
		console.log("Error");
}

Lista.prototype.getElemento = function(){
	return this.listaItems[this.pos];
}

Lista.prototype.inicio = function(){
	this.pos = 0;
}

Lista.prototype.ultimo = function(){
	this.pos = this.numeroItems -1;
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

Lista.prototype.moverA = function(index){
	if(index >= 0 && index < numeroItems -1)
		this.pos = index;
}

Lista.prototype.dibujar = function(idBody){
	var elemento = document.getElementById("idBody");
	var tr = document.createElement('tr');
	elemento.appendChild(tr);
	var td = document.createElement('td');
	tr.appendChild(td);
	var texto = document.createTextNode(this.listaItems[this.numeroItems - 1]);
	td.appendChild(texto);
}

/*
*constructor y proto los dos elementos de javascript
*var listaTareas = new Lista();
*listaTareas.tostring()
*listaTareas.agregar("Programar la lista")
*listaTareas.tostring();
*/
