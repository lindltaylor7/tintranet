<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Metas de Las areas</h6>
                </div>
                <div class="pull-right">
                    <a href="#" class="pull-left inline-block full-screen mr-15">
                        <i class="zmdi zmdi-fullscreen"></i>
                    </a>
                    <div class="pull-left inline-block dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Update</a></li>
                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Edit</a></li>
                            <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Remove</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body row pa-0">
                  <div class="col-md-12">
                    <div class="pt-20">
                        <div class="streamline user-activity">

                            @foreach ($goals as $goal)                     
                            @if($goal->count())
                            <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                        <img class="img-responsive img-circle" src="{{asset('img/user.png')}}" alt="avatar"/>
                                    </div>
                                    <div class="sl-content">
                                        <p class="inline-block"><span class="capitalize-font txt-primary mr-5 weight-500">{{$goal->area->name}}</span><span> tiene la meta de {{$goal->description}}</span></p>
                                        <span class="block txt-grey font-12 capitalize-font">3 Min</span>
                                    </div>
                                </a>
                            </div>                                
                            @endif
                            @endforeach
                        
                        
                           {{-- 
                                //Para archivos <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                        <img class="img-responsive img-circle" src="{{asset('img/user1.png')}}" alt="avatar"/>
                                    </div>
                                    <div class="sl-content">
                                        <p class="inline-block"><span class="capitalize-font txt-primary mr-5 weight-500">Evie Ono</span><span>added three new photos in the library</span></p>
                                        <div class="activity-thumbnail">
                                            <img src="{{asset('img/thumb-1.jpg')}}" alt="thumbnail"/>
                                            <img src="{{asset('img/thumb-2.jpg')}}" alt="thumbnail"/>
                                            <img src="{{asset('img/thumb-3.jpg')}}" alt="thumbnail"/>
                                        </div>
                                        <span class="block txt-grey font-12 capitalize-font">8 Min</span>
                                    </div>
                                </a>
                            </div>   --}}     
                                      
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>