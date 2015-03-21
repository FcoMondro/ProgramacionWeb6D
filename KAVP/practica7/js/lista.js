function Lista(){
	this.listaItems = [];
	this.numItems = 0;
	this.pos = 0;
}

Lista.prototype.clear = function(){
	this.listaItems = [];
	this.pos = this.pos = 0;
}

Lista.prototype.agregar = function(item){
	this.listaItems[this.numItems++] = item;
}

Lista.prototype.toString = function(){
	console.log(this.listaItems);
}

Lista.prototype.buscar = function(item){
	for (var i = 0; i <= this.numItems-1; i++) {
		if(this.listaItems[i]==item)
			return i;
	}
	return -1;
}
/*
*Regresa true si la lista contiene el item de lo contrario
*regresa false
*/
Lista.prototype.contiene = function (item) {
	var index= this.buscar(item);

	if(index>=0)
		return true;
	return false;
}

Lista.prototype.posActual = function(){
	return this.pos;
}

Lista.prototype.siguiente = function(){
	
	if(this.pos+1 > this.numItems-1)
	{
		this.pos=0;

		//return this.listaItems[this.pos];
	}
		
	else
	{
		this.pos++;
		//return this.listaItems[this.pos];
	}
		
}

Lista.prototype.anterior = function(){
	
	if(this.pos-1 < 0)
	{
		this.pos=this.numItems-1;
		//return this.listaItems[this.pos];
	}
		
	else
	{
		this.pos--;
		//return this.listaItems[this.pos];
	}

}

Lista.prototype.getElemento = function(){

	return this.listaItems[this.pos];
}


Lista.prototype.inicio = function(){
	this.pos=0;

	
	//return this.listaItems[this.pos];
	
}

Lista.prototype.ultimo = function(){
	this.pos=this.numItems-1;

	//return this.listaItems[this.pos];
	
}

Lista.prototype.eliminar = function(item){

	var index = this.buscar(item);
	if(index > -1)
	{
		this.listaItems.splice(index,1);
		--this.numItems;
	}	
	return false;
}

Lista.prototype.moverA = function(index){
	if(index >= 0 && index < this.numItems-1)
		this.pos=index;	
}


Lista.prototype.dibujar =  function(body){

		var fila = document.createElement("tr");
		var celda = document.createElement("td");
		var celda2= document.createElement("td");
		var tarea = document.createTextNode(this.getElemento());
		celda.appendChild(tarea);
		fila.appendChild(celda);
		fila.appendChild(celda2);
		this.pos++;
		
		body.appendChild(fila);
}

