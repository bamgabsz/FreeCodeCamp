## Modificando uma Array Nested

```javascript
var minhaLista = [[11,22,33][44,55,66][77,88,99]]

var myData = minhaLista[qualDasArrays][qualElemento];
```

A primeira bracket da váriavel minhaLista ela informa qual vai ser a array dentro das arrays escolhida, sabendo que no meio computacional começamos a contar pelo 0, ou seja 0,1,2,3... Logo a segunda bracket será utilizada para pegar o elemento da lista na qual a primeira bracket identificou.