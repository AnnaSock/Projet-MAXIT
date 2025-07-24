<?php
namespace Aks\Src\Entity;
enum TypeTransaction: string{
    case DEPOT="Depot";
    case RETRAIT="Retrait";
    case PAYEMENT= "Payement";
}