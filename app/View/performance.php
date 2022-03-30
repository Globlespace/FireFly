<?php include "Include/header.php"?>
<?php include "Include/sidebar.php"?>
    <link rel="stylesheet" href="<?=STYLE?>perform.css">

        <div class="col s9">
            <div class="main">
                  
                <h3 class="quoteh1">SPOC Management</h3>
              
               
                <div class="filters">
                   <div style=" display: flex;" class="sqq">
                    <li><a style="color: white;" class="cool-link" href="">Funnel Management</a></li>
                    <li><a style="color: white;" class="cool-link" href="">Performance Metric</a></li>
                    <li><a style="color: white;"class="cool-link" href="">SPOC Capacity</a></li>
                   </div>
                  
                </div>
               
            </div>
            <div class="filters2">
                <div class="select-wrapper">
                    <div class="select">
                        <div class="select__trigger"><span>Destinations</span>
                            <i class="material-icons ">arrow_drop_down</i>
                            <!-- <div class="arrow"></div> -->
                        </div>
                        <div class="custom-options">
                            <form action="">
                            <p>
                                <label>
                                  <input class="custom-option" id="indeterminate-checkbox" type="checkbox" />
                                  <span>Kashmir</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                  <input class="custom-option" id="indeterminate-checkbox" type="checkbox" />
                                  <span>Kerela</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                  <input class="custom-option" id="indeterminate-checkbox" type="checkbox" />
                                  <span>Dubai</span>
                                </label>
                            </p>
                            <p>
                                <button  class="btn waves-effect waves-light btn-small center" type="submit" name="action">Apply
                                   
                                  </button>
                            </p>
                           
                               
                            </form>
                            
                        </div>
                        </div>
                </div>
                <div class="select-wrapper">
                    <div class="select">
                        <div class="select__trigger"><span>Agents</span>
                            <i class="material-icons ">arrow_drop_down</i>
                            <!-- <div class="arrow"></div> -->
                        </div>
                        <div class="custom-options">
                            <form action="">
                            <p>
                                <label>
                                  <input class="custom-option" id="indeterminate-checkbox" type="checkbox" />
                                  <span>Arif</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                  <input class="custom-option" id="indeterminate-checkbox" type="checkbox" />
                                  <span>Sumaira</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                  <input class="custom-option" id="indeterminate-checkbox" type="checkbox" />
                                  <span>Ali</span>
                                </label>
                            </p>
                            <p>
                                <button  class="btn waves-effect waves-light btn-small center" type="submit" name="action">Apply
                                   
                                  </button>
                            </p>
                           
                               
                            </form>
                            
                        </div>
                        </div>
                </div>

               
              <div class="radiobtns">
                  <form action="">
                    <p>
                        <label>
                          <input class="with-gap" name="group1" type="radio"  />
                          <span>Today</span>
                        </label>
                      </p>
                      <p>
                        <label>
                          <input class="with-gap" name="group1" type="radio"  />
                          <span>Yesterday</span>
                        </label>
                      </p>
                      <p>
                        <label>
                          <input class="with-gap" name="group1" type="radio"  />
                          <span>Last 7 days</span>
                        </label>
                      </p>
                      <p>
                        <label>
                          <input class="with-gap" name="group1" type="radio"  />
                          <span>Last 30 days</span>
                        </label>
                      </p>
                  </form>
              </div>         
                        
            </div>
        <div class="matricContainer--lTlY2-g pt24 pb24 pl15 pr15">
            <p class="f14p pfc3 fw7 mb15">Click on the card to see the detailed view</p>
            <div class="row--2hVVQQJ flex flexWrap">
                <span class="boxWidth--15RI3KX mb24 cursorP">
                    <div>

                    </div>
                    <div class="cursorP">
                        <div class="boxHeader--SybgVs0 alignCenter p8 flex">
                            <p class="f14p pfc3 fw7 flexFull">Time to first quote 
                                <span class="fw4">(in hrs)</span>
                            </p>
                            <div class="tooltip--V30zXq1 icon16 relative block"> 
                                <svg viewBox="0 0 20 20" class="icon shape-codepen">
                                    <use xlink:href="/adb/desktop_agent_assets/build/icons-svg-a25927fb718c32c6b57bf68b336c421b.svg#InfoIcon-usage"></use></svg>
                                    <!-- <div class="tooltipWraper--2bHGbqW absolute sfcw p8 radius2">Time taken from lead assignment to first quote</div> -->
                                </div>
                            </div>
                            <div class="pt15 pb15 pl8 pr8 sbcw flex">
                                <div class="matricBox---GjqGF7 grayBox--12rlGoQ  p8 mr8 flexFull radius4">
                                    <div class="relative hfull ">
                                        <p class="f12 fw7 pfc3">Benchmark</p>
                                        <p class=" f24 fw7 pfc3 absolute b0 l0">9.1</p>
                                    </div>
                                </div>
                                <div class="matricBox---GjqGF7 redBox--1PQs61P  p8 mr8 flexFull radius4">
                                    <div class="relative hfull ">
                                        <p class="f12 fw7 pfc3">Yours</p>
                                        <p class="redText--2dX1dlR f24 fw7 pfc3 absolute b0 l0">NA</p>
                                    </div>
                                </div>
                                <div class="matricBox---GjqGF7 grayBox--12rlGoQ  p8 mr8 flexFull radius4">
                                    <div class="relative hfull ">
                                        <p class="f12 fw7 pfc3">Ideal</p>
                                        <p class=" f24 fw7 pfc3 absolute b0 l0">0.7</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>
                    <span class="boxWidth--15RI3KX mb24 cursorP">
                        <div></div>
                        <div class="cursorP">
                            <div class="boxHeader--SybgVs0 alignCenter p8 flex">
                                <p class="f14p pfc3 fw7 flexFull">Time to first follow-up 
                                    <span class="fw4">(in hrs)</span>
                                </p>
                                <div class="tooltip--V30zXq1 icon16 relative block"> 
                                    <svg viewBox="0 0 20 20" class="icon shape-codepen">
                                        <use xlink:href="/adb/desktop_agent_assets/build/icons-svg-a25927fb718c32c6b57bf68b336c421b.svg#InfoIcon-usage"></use></svg>
                                        <!-- <div class="tooltipWraper--2bHGbqW absolute sfcw p8 radius2">Time taken from lead assignment to first follow-up (add note)

                                        </div> -->
                                    </div>
                                </div>
                                <div class="pt15 pb15 pl8 pr8 sbcw flex">
                                    <div class="matricBox---GjqGF7 grayBox--12rlGoQ  p8 mr8 flexFull radius4">
                                        <div class="relative hfull ">
                                            <p class="f12 fw7 pfc3">Benchmark</p>
                                            <p class=" f24 fw7 pfc3 absolute b0 l0">10.1</p>
                                        </div>
                                    </div>
                                    <div class="matricBox---GjqGF7 redBox--1PQs61P  p8 mr8 flexFull radius4">
                                        <div class="relative hfull ">
                                            <p class="f12 fw7 pfc3">Yours</p>
                                            <p class="redText--2dX1dlR f24 fw7 pfc3 absolute b0 l0">NA</p>
                                        </div>
                                    </div>
                                    <div class="matricBox---GjqGF7 grayBox--12rlGoQ  p8 mr8 flexFull radius4">
                                        <div class="relative hfull ">
                                            <p class="f12 fw7 pfc3">Ideal</p>
                                            <p class=" f24 fw7 pfc3 absolute b0 l0">2.9</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </span>
                        <span class="boxWidth--15RI3KX mb24 cursorP">
                            <div>

                            </div>
                            <div class="cursorP">
                                <div class="boxHeader--SybgVs0 alignCenter p8 flex">
                                    <p class="f14p pfc3 fw7 flexFull">L2C for best leads 
                                        <span class="fw4">(in %)</span>
                                    </p>
                                    <div class="tooltip--V30zXq1 icon16 relative block"> 
                                        <svg viewBox="0 0 20 20" class="icon shape-codepen">
                                            <use xlink:href="/adb/desktop_agent_assets/build/icons-svg-a25927fb718c32c6b57bf68b336c421b.svg#InfoIcon-usage"></use></svg>
                                            <!-- <div class="tooltipWraper--2bHGbqW absolute sfcw p8 radius2">Performance on super hot/ highest quality leads in TT</div> -->
                                        </div>
                                    </div>
                                    <div class="pt15 pb15 pl8 pr8 sbcw flex">
                                        <div class="matricBox---GjqGF7 grayBox--12rlGoQ  p8 mr8 flexFull radius4">
                                            <div class="relative hfull ">
                                                <p class="f12 fw7 pfc3">Benchmark</p>
                                                <p class=" f24 fw7 pfc3 absolute b0 l0">7.1</p>
                                            </div>
                                        </div>
                                        <div class="matricBox---GjqGF7 redBox--1PQs61P  p8 mr8 flexFull radius4">
                                            <div class="relative hfull ">
                                                <p class="f12 fw7 pfc3">Yours</p>
                                                <p class="redText--2dX1dlR f24 fw7 pfc3 absolute b0 l0">0.0</p>
                                            </div>
                                        </div>
                                        <div class="matricBox---GjqGF7 grayBox--12rlGoQ  p8 mr8 flexFull radius4">
                                            <div class="relative hfull ">
                                                <p class="f12 fw7 pfc3">Ideal</p>
                                                <p class=" f24 fw7 pfc3 absolute b0 l0">10.0</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </span>
                            <span class="boxWidth--15RI3KX mb24 cursorP">
                                <div>

                                </div>
                                <div class="cursorP">
                                    <div class="boxHeader--SybgVs0 alignCenter p8 flex">
                                        <p class="f14p pfc3 fw7 flexFull">My Hot &amp; Shortlisted leads per spoc 
                                            <span class="fw4"></span>
                                        </p>
                                        <div class="tooltip--V30zXq1 icon16 relative block">
                                             <svg viewBox="0 0 20 20" class="icon shape-codepen">
                                                 <use xlink:href="/adb/desktop_agent_assets/build/icons-svg-a25927fb718c32c6b57bf68b336c421b.svg#InfoIcon-usage"></use>
                                                </svg>
                                                <!-- <div class="tooltipWraper--2bHGbqW absolute sfcw p8 radius2">Number of high intent travelers identified</div> -->
                                            </div>
                                        </div>
                                        <div class="pt15 pb15 pl8 pr8 sbcw flex">
                                            <div class="matricBox---GjqGF7 grayBox--12rlGoQ  p8 mr8 flexFull radius4">
                                                <div class="relative hfull ">
                                                    <p class="f12 fw7 pfc3">Benchmark</p>
                                                    <p class=" f24 fw7 pfc3 absolute b0 l0">2.0</p>
                                                </div>
                                            </div>
                                            <div class="matricBox---GjqGF7 redBox--1PQs61P  p8 mr8 flexFull radius4">
                                                <div class="relative hfull ">
                                                    <p class="f12 fw7 pfc3">Yours</p>
                                                    <p class="redText--2dX1dlR f24 fw7 pfc3 absolute b0 l0">0.0</p>
                                                </div>
                                            </div>
                                            <div class="matricBox---GjqGF7 grayBox--12rlGoQ  p8 mr8 flexFull radius4">
                                                <div class="relative hfull ">
                                                    <p class="f12 fw7 pfc3">Ideal</p>
                                                    <p class=" f24 fw7 pfc3 absolute b0 l0">2.0</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                                <span class="boxWidth--15RI3KX mb24 cursorP">
                                    <div>

                                    </div>
                                    <div class="cursorP">
                                        <div class="boxHeader--SybgVs0 alignCenter p8 flex">
                                            <p class="f14p pfc3 fw7 flexFull">Leads worked per SPOC per day
                                                 <span class="fw4"></span>
                                                </p><div class="tooltip--V30zXq1 icon16 relative block"> 
                                                    <svg viewBox="0 0 20 20" class="icon shape-codepen">
                                                        <use xlink:href="/adb/desktop_agent_assets/build/icons-svg-a25927fb718c32c6b57bf68b336c421b.svg#InfoIcon-usage"></use>
                                                    </svg>
                                                    <!-- <div class="tooltipWraper--2bHGbqW absolute sfcw p8 radius2">
                                                        Unique leads worked by SPOC per day
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="pt15 pb15 pl8 pr8 sbcw flex">
                                                <div class="matricBox---GjqGF7 grayBox--12rlGoQ  p8 mr8 flexFull radius4">
                                                    <div class="relative hfull ">
                                                        <p class="f12 fw7 pfc3">Benchmark</p>
                                                        <p class=" f24 fw7 pfc3 absolute b0 l0">12.0</p>
                                                    </div>
                                                </div>
                                                <div class="matricBox---GjqGF7 redBox--1PQs61P  p8 mr8 flexFull radius4">
                                                    <div class="relative hfull ">
                                                        <p class="f12 fw7 pfc3">Yours</p>
                                                        <p class="redText--2dX1dlR f24 fw7 pfc3 absolute b0 l0">0.0</p>
                                                    </div>
                                                </div>
                                                <div class="matricBox---GjqGF7 grayBox--12rlGoQ  p8 mr8 flexFull radius4">
                                                    <div class="relative hfull ">
                                                        <p class="f12 fw7 pfc3">Ideal</p>
                                                        <p class=" f24 fw7 pfc3 absolute b0 l0">32.0</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span
                                    >
                                </div>
                                <div class="text-right">
                                    <p class="pfc4 f12 fw7">Last updated today at: 07:59 PM</p>
                                </div>
                            </div>    
        </div>
<?php include "Include/footer.php"?>