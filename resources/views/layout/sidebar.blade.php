<div class="site-menubar">
        <div class="site-menubar-body">
          <div>
            <div>
              <ul class="site-menu" data-plugin="menu">
                <li class="site-menu-category">General</li>
                <li class="site-menu-item {{ $sidemenuActive == 'index' ? 'active': '' }}">
                  <a class="animsition-link waves-effect waves-classic" href="{{ url('/marketing/dashboard') }}">
                          <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                          <span class="site-menu-title">Dashboard</span>
                  </a>
                </li>
                <li class="site-menu-item {{ $sidemenuActive == 'users' ? 'active': '' }}">
                  <a class="animsition-link waves-effect waves-classic" href="{{ url('/marketing/users') }}">
                          <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                          <span class="site-menu-title">User Population</span>
                      </a>
                </li>
                
                <li class="site-menu-item {{ $sidemenuActive == 'transaction' ? 'active': '' }}">
                  <a class="animsition-link waves-effect waves-classic" href="{{ url('/marketing/transaction') }}">
                          <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                          <span class="site-menu-title">Transaction Population</span>
                      </a> 
                
                <li class="site-menu-item {{ $sidemenuActive == 'payment' ? 'active': '' }}">
                  <a class="animsition-link waves-effect waves-classic" href="{{ url('/marketing/payment') }}">
                          <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                          <span class="site-menu-title">Payment Population</span>
                      </a>
                </li>
                
                <li class="site-menu-item has-sub {{ $sidemenuActive == 'loyalty' ? 'active open': '' }}">
                  <a href="javascript:void(0)">
                          <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                          <span class="site-menu-title">Loyalty</span>
                                  <span class="site-menu-arrow"></span>
                      </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item {{ $sidemenuSubActive == 'cashback' ? 'active': '' }}">
                      <a class="animsition-link waves-effect waves-classic" href="{{ url('/marketing/loyalty/cashback') }}">
                        <span class="site-menu-title">Cashback</span>
                      </a>
                    </li>
                    <li class="site-menu-item {{ $sidemenuSubActive == 'discount' ? 'active': '' }}">
                        <a class="animsition-link waves-effect waves-classic" href="{{ url('/marketing/loyalty/discount') }}">
                        <span class="site-menu-title">Discount</span>
                      </a>
                    </li>
                    <li class="site-menu-item {{ $sidemenuSubActive == 'voucher' ? 'active': '' }}">
                        <a class="animsition-link waves-effect waves-classic" href="{{ url('/marketing/loyalty/voucher') }}">
                        <span class="site-menu-title">Voucher</span>
                      </a>
                    </li>
                    <li class="site-menu-item {{ $sidemenuSubActive == 'calculationrule' ? 'active': '' }}">
                        <a class="animsition-link waves-effect waves-classic" href="{{ url('/marketing/loyalty/calculationrule') }}">
                           <span class="site-menu-title">Rule Calculation</span>
                        </a>
                    </li>
                                        
                  </ul>
                </li>

                <li class="site-menu-item has-sub {{ $sidemenuActive == 'broadcast' ? 'active open': '' }}">
                  <a href="javascript:void(0)">
                          <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                          <span class="site-menu-title">Broadcast</span>
                                  <span class="site-menu-arrow"></span>
                      </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item {{ $sidemenuSubActive == 'sms' ? 'active': '' }}">
                      <a class="animsition-link waves-effect waves-classic" href="{{ url('/marketing/broadcast/sms') }}">
                        <span class="site-menu-title">SMS</span>
                      </a>
                    </li>
                    <li class="site-menu-item {{ $sidemenuSubActive == 'email' ? 'active': '' }}">
                        <a class="animsition-link waves-effect waves-classic" href="{{ url('/marketing/broadcast/email') }}">
                        <span class="site-menu-title">Email</span>
                      </a>
                    </li>
                    <li class="site-menu-item {{ $sidemenuSubActive == 'web_pushnotification' ? 'active': '' }}">
                        <a class="animsition-link waves-effect waves-classic" href="{{ url('/marketing/broadcast/notification') }}">
                        <span class="site-menu-title">Web Push Notification</span>
                      </a>
                    </li>
                                                            
                  </ul>
                </li>

              </ul>
              <div class="site-menubar-section">
                <h5>
                  Milestone
                  <span class="float-right">30%</span>
                </h5>
                <div class="progress progress-xs">
                  <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
                </div>
                <h5>
                  Release
                  <span class="float-right">60%</span>
                </h5>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
                </div>
              </div>      </div>
          </div>
        </div>
      
        <div class="site-menubar-footer">
          <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
            data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
          </a>
          <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
          </a>
          <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
          </a>
        </div>
      </div>