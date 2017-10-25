<?php

/*
 *
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/http
 * @copyright   2017
 * 
 */

namespace Rubricate\Http;


interface IRequestHttp extends 
    IGetHttp,    IPostHttp,  IFilesHttp,
    IServerHttp, ICookieHttp
{
    
}


