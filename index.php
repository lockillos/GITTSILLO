<!DOCTYPE html>
<html>
<head>
	<title>PAGINA DE GIT</title>
</head>
<body>
<script type="text/javascript">
const numeros = [1,2,3,4,5,6,7,8,9];
const animales = [
	{Nombre:"Gaspar", Edad:10, Raza:"Quiltro", Tipo:1},
	{Nombre:"Federico", Edad:7, Raza:"Gatuno", Tipo:2},
	{Nombre:"Copo", Edad:4, Raza:"Pekenes", Tipo:1},
	{Nombre:"Chocolo", Edad:4, Raza:"Dalmata", Tipo:1},
	{Nombre:"Copo", Edad:4, Raza:"Angora", Tipo:2}
];

const NumerosFiltrados = numeros.filter(x => x < 5);
console.log(NumerosFiltrados);	
console.log(numeros);

const Perros = animales.filter(x => x.Tipo == 1);
const Gatos = animales.filter(x => x.Tipo == 2);

console.log(Perros);
console.log(Gatos);
console.log(animales);
</script>
</body>
</html>