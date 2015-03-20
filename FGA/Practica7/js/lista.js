function Lista(){
	this.listaItems = [];
	this.numItems = 0;
	this.pos = 0;
}

Lista.prototype.clear =  function(){

	this.listaItems =[];
	this.pos =this.pos = 0;
}

Lista.prototype.agregar = function(item){
	this.listaItems[this.numItems] = item;
	this.numItems++;

}

Lista.prototype.toString = function(){

	console.log(this.listaItems);
}

Lista.prototype.buscar = function(item){
	for(var i=0; i<= this.numItems-1; i++){
		if(this.listaItems[i]==item)
			return i;
	}
	return -1;
}


Lista.prototype.contiene = function(item){
	var index = this.buscar(item);

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
		return this.listaItems[this.pos];
	}
	else
	{
		this.pos++;
		return this.listaItems[this.pos];
	}
}

Lista.prototype.anterior = function(){
	if(this.pos-1 < 0)
	{
		this.pos=this.numItems-1;
		return this.listaItems[this.pos]
	}
	else
	{
		this.pos--;
		return this.listaItems[this.pos];
	}
}

Lista.prototype.getElemento = function(posItem){
	return this.listaItems[posItem];
}

Lista.prototype.inicio = function(){
	return this.listaItems[0];
}

Lista.prototype.ultimo =function(){
	return this.listaItems[this.numItems-1];
}