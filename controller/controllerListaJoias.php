<script language="javascript">
var win = null;
function NovaJanela(pagina,nome,w,h,scroll){
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings = 'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
	win = window.open(pagina,nome,settings);
}
</script>


<a href="http://www.codigofonte.com.br" onclick="NovaJanela('controllerListaJoiaIndividual.php?loja=cod1&cor=cod2&pedra=cod3&tipo=cod4','Exibição de Jóia','450','600','yes');return false">Nova Janela de Exemplo</a>