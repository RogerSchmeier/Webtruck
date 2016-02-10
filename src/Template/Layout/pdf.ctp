<?php
header ('Content-Disposition: attachment;filename="Relatorio.pdf"');
echo $this->fetch('content');
?>
