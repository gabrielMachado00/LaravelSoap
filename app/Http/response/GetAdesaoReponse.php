<?php

namespace App\Soap\response;

class GetAdesaoResponse
{
  /**
   * @var string
   */
  protected $GetAdesaoResult;

  /**
   * GetConversionAmountResponse constructor.
   *
   * @param string
   */
  public function __construct($GetAdesaoResult)
  {
    $this->GetAdesaoResult = $GetAdesaoResult;
  }

  /**
   * @return string
   */
  public function geGetAdesaoResult()
  {
    return $this->GetAdesaoResult;
  }
}