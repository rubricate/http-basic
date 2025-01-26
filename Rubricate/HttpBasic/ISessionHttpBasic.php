<?php

namespace Rubricate\HttpBasic;

interface ISessionHttpBasic extends 
    ICacheLimiterHttpBasic, ICacheExpireSessionHttpBasic, 
    IStartSessionHttpBasic, IDestroySessionHttpBasic, 
    ISetSessionHttpBasic, IGetSessionHttpBasic,
    IDelSessionHttpBasic, IIdSessionHttpBasic, 
    IAllSessionHttpBasic, IHasSessionHttpBasic
{
    
}


