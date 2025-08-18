<div class="dashboard-body">
<style type="text/css">
  .tree-border::before {
    display: block;
    width: 50%;
    margin-left: 25%;
    margin-right: 25%;
    border-top: 2px solid #5883b7;
    border-radius: 100px;
    color: #2D2A03;
    content: "|";
  }

  .data-table td span:nth-child(3n - 1) {
    cursor: pointer !important;
    color: #fe7e10 !important;
    font-weight: 700 !important;
    padding: 6px 6px 4px 6px;

  }

  /*Om code start*/
  /* .data-table td span:nth-child(3n - 1){cursor:pointer !important; color:#e6b429 !important; font-weight:400 !important; padding:6px 6px 4px 6px;}  */
  .load-gif img {
    width: 120px;
  }

  .load-gif {
    width: 20px !important;
  }

  .load-gif img {
    width: 20px !important;
    float: left;
  }

  .system-cal-report {
    font-size: 12px;
    color: red;
  }

  #userDataModal #userName {
    text-transform: uppercase;
  }

  #userData table {
    width: 100%;
    border: 1px #ccc solid;
    background-color: #000;
  }

  #userData table td {
    border: 1px #ccc solid;
    padding: 8px;
    text-transform: uppercase;
    color: #fff;
    text-align: center;
  }

  #userData table td i {
    margin-right: 4px;
  }

  #userData table td span {
    float: center;
    font-weight: 100px;
    font-size: 12px;
  }
</style>

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Tree View</h2>
            <!-- <div class="flex-align gap-2">
                <a href="{{route('user.ticket')}}"
                    class="btn btn--sm btn--base "> <i class="fas fa-plus"></i>
                    New Ticket</a>
            </div> -->
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
             
                <div class="card custom--card h-100">
                    <!-- <div class="card-header">
                        <form class="table-search-wrapper">
                            <div class="input-group style-left">
                                <input type="text" class="form-control form--control md-style" name="search" placeholder="Search by Name, Username, Email" value="{{ request()->search }}">
                                <button class="input-group-text">
                                    <img src="{{asset('')}}user/images/search.png" width="20" height="20" alt="">
                                </button>
                            </div>
                        </form>
                    </div> -->
                    <div class="card-body">
                     
                    

              <table id="zero-conf" class="data-table" style="width:100%">


                <tbody>
                  <tr class="text-center">
                    <td colspan="{{ $directCount*2 }}">
                      <h3 class="text-center"><strong>Distributeur Record</strong></h3>
                    </td>
                  </tr>

                  <?php
                                      $status = @$mydata->active_status;
                                      if ($status!="")
                                       {
                                       
                                      if ($status == "Active" || $status == "Block")
                                        {
                                        $color = "hen13";
                                        }
                                      elseif ($status == "Pending"  ||  $status == 'Inactive')
                                        {
                                        $color = "hen12";
                                        }
                                       else
                                        {
                                          $color = "empty";
                                        }
                                           # code...
                                      }else
                                      {
                                        $color = "empty";  
                                      }
                                  ?>
                  <tr class="text-center">
                    <td colspan="{{ $directCount*2 }}" style="border-color:#ffffff; background-color:#ffffff;"
                      class="text-center">
                      <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton0"
                        id="ctl00_ContentPlaceHolder1_ImageButton0" data-toggle="tooltip" title='' data-html="true"
                        OnClick="javascript:void(0)" data-toggle="tooltip" data-html="true" data-trigger="hover"
                        title="" data-placement="bottom" data-original-title=""
                        src="{{ asset('assets/images/') }}/{{ $color }}.png"
                        style="border-width: 0px; width: 125px; height: 70px; background: #ffffff;">
                      <br>
                      <span id="ctl00_ContentPlaceHolder1_Label0" style=" font-weight: 700">
                        <?=@$mydata->name?strtoupper(@$mydata->name):""?>
                      </span> <br>
                      <span id="ctl00_ContentPlaceHolder1_Label7">
                        <?=@$mydata->username?strtoupper(@$mydata->username):""?>
                      </span></td>
                  </tr>
                  <tr class="text-center">

                    <?php if(is_array($direct_team) || is_object($direct_team)){ ?>


                    @foreach($direct_team as $value)


                      <td colspan="2" style="border-color:#ffffff; background-color:#ffffff;" class="text-center">
                        <div class="tree-border"></div>
                      </td>
                    @endforeach

                    <?php }?>
                  </tr>

                  <tr class="text-center">


                    <?php if(is_array($direct_team) || is_object($direct_team)){ ?>


                    @foreach($direct_team as $value)

                      <?php
                                        $status = @$value->active_status;
                                      if ($status!="")
                                       {
                                       
                                       if ($status == "Active" || $status == "Block")
                                        {
                                        $color = "hen13";
                                        }
                                      elseif ($status == "Pending"  ||  $status == 'Inactive')
                                        {
                                        $color = "hen12";
                                        }
                                       else
                                        {
                                          $color = "empty";
                                        }
                                      }else
                                      {
                                        $color = "empty";  
                                      }

              ?>

                      <td colspan="2" style="border-color:#ffffff; background-color:#ffffff;" class="text-center"><a
                          href="{{ route('user.tree-view') }}?user_id={{ @$value->username }}">

                          <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton1"
                            id="ctl00_ContentPlaceHolder1_ImageButton1" data-toggle="tooltip" title='' data-html="true"
                            href="{{ route('user.tree-view') }}?user_id={{ @$value->username }}"
                            data-toggle="tooltip" data-html="true" data-trigger="hover" title="" data-placement="bottom"
                            data-original-title=""
                            src="{{ asset('assets/images/') }}/{{ $color }}.png"
                            style="border-width: 0px;width: 125px;height: 70px;background: #ffffff;"
                            userName="<?=$value->name?strtoupper($value->name):""?>">
                        </a> <br>
                        <span id="ctl00_ContentPlaceHolder1_Label1" style=" font-weight: 700">
                          <?=@$value->name?strtoupper(@$value->name):""?>
                        </span><br>
                        <span id="ctl00_ContentPlaceHolder1_Label8">

                          <?=@$value->username?strtoupper(@$value->username):""?>
                        </span></td>

                    @endforeach

                    <?php }?>

                  </tr>

                </tbody>

              </table>




                    </div>
              
                </div>


            </div>
        </div>
    </div>

</div>

<div id="userDataRes">
  <!-- Modal -->
  <div class="modal fade" id="userDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userName"></h5>
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="userData"><span class="load-gif"><img style="width: 100%;"
                src="{{ asset('assets/images/load.gif') }}"> System calculating reports</span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary close_model" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('upnl/js/om_all_function.js') }}"></script>



<script>
  $(".close_model").on("click", function () {

    $('#userDataModal').modal('hide');
  });
</script>