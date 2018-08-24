<?php
//FUNCTIONS PARA CORE DO SISTEMA
//NAO CRIAR FUNÇÕES DO APP AQUI, CRIAR EM HELPER

//remove palavras que podem permitir o sql injection
function anti_injection($sql){
  $sql = preg_replace(sql_regcase("/(http|www|wget|from|select|insert|delete|where|.dat|.txt|.gif|drop table|show tables| or |#|\*|--|\\\\)/"),"",$sql);
  $sql = trim($sql);
  $sql = strip_tags($sql);
  $sql = addslashes($sql);
  return $sql;
}