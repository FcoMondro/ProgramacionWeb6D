function Lista(){
	this.ListaItems = [];
	this.pos = 0;
	this.numeroItems = 0;
}

Lista.prototype.clear = function(){
	this.ListaItems = [];
	this.numeroItems = this.pos = 0;
}
/*
*Esta función agreaga el elemento al final de la lista.
*/
Lista.prototype.agregar = function(item){
	this.ListaItems[this.numeroItems++] = item;
}
Lista.prototype.toString= function(){
	console.log(this.ListaItems);
}
/*
*Esta función devuelve el indice dentro de la lista
*en caso de no econtrarlo devuelve -1
*/
Lista.prototype.buscar = function(item){
	for(var i=0; i< this.numeroItems; i++){
		if(this.ListaItems[i] == item)
			return i;
	}
	return -1;
}

/*
*Regresa un valor boolean true, si la lista contiene el item.
* en caso contrario regresa false
*/
Lista.prototype.contiene= function(item){
	var index = this.buscar(item);
	if(index >= 0)
		return true;
	return false;
}

Lista.prototype.posActual = function(){
	this.pos = this.pos;
	console.log(this.pos);
}

Lista.prototype.eleminar = function(item){
	var index = this.buscar(item);
	if (index >-1){
		this.ListaItems.splice(index,1);
		--this.numeroItems;
		return true;
	}
	return false;
}
Lista.prototype.siguiente = function(){
	if((this.pos + 1) >= this.numeroItems)
		return console.log("No hay siguiente");
	console.log(this.ListaItems[++this.pos]);
}

Lista.prototype.anterior= function(){
	if(this.pos == 0)
		return console.log("No hay anterior");
	console.log(this.ListaItems[--this.pos]);
}

Lista.prototype.getElemento = function(){
	return this.ListaItems[this.pos];
}

Lista.prototype.inicio = function(){
	this.pos = 0;
}

Lista.prototype.ultimo = function(){
	this.pos = this.numeroItems-1;
}

Lista.prototype.moverA = function(index){
	if(index >=0 && index < this.numeroItems)
		this.pos = index;
}
/*
* Quita lo que esta ahí y vuelve a dibujar la tabla
*/
Lista.prototype.dibujar = function(idBody){
	   // Obtener la referencia del elemento body
  	var ele = document.getElementById("isBody");
	var tr = document.createElement('tr');
	ele.appendChild(tr);
	var td = document.createElement('td');
	tr.appendChild(td);
	var txt = document.createTextNode(this.ListaItems[this.numeroItems-1]);
	td.appendChild(txt);
}