<?php
// DDoS (Negação de Serviços)

// Como funicona? 
// O atacante sobrecarrega o servidor com requisições para o mesmo recurso.

// Formas de Prevenir:
// Limitar requisições por IP:
if ($_SESSION ['request'] > 100) {
    die("C:/DEDSEC DDoS detectado!");
}
// Usar Cloundflare ou outro WAF para mitigar ataques 


?>