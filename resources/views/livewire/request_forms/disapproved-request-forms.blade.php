<div class="row" style="align-content: center; margin-left: 1rem; margin-right: 1rem;">
    @foreach ($disapproved_requestforms as $disapproved_request)
      <div class="col-12">
          <!--REQUEST LIST-->
          <div class="col-lg-12">
              <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; flex-direction: row;">
                  <table cellpadding="20px" cellspacing="10px" style="width: 100%;">
                      <tr>
                          <td rowspan="2" style="width: 10%;">
                              <img alt="user profile" src="images/user-req.png" style="align-self: center;">
                          </td>
                          <td style="vertical-align:middle;" style="width: 80%;">
                              <label style="font-size: 16px; line-height: 5%;">{{ $disapproved_request->teacher_name }}</label> <br>
                              <label style="font-size: 14px; line-height: 5%;">{{ $disapproved_request->created_at->format('F d,Y   h:i A') }}</label> <br>
                              <label style="font-size: 24px; margin-top: 1rem;">{{ $disapproved_request->form_type }}</label>
                          </td>
                          <td style="vertical-align: top;" style="width: 20%;">
                              <label style="font-size: 24px; margin-top: 1rem; color: #252525; float: right; background-color: {{ $disapproved_request->status == 'approved' ? '#d1d8ff' : ($disapproved_request->status == 'pending' ? '#BFFFBF' : '#ffb8b8') }}; color: {{ $disapproved_request->status == 'approved' ? '#3C58FF' : ($disapproved_request->status == 'pending' ? '#006400' : '#ff1717') }}; padding: 3px 20px; border-radius: 10px">{{ strtoupper($disapproved_request->status) }}</label>
                          </td>
                      </tr>
                      <td>ID: RF#{{ $disapproved_request->id }}</td>
                      <td style="vertical-align: bottom; float: right; width: 100%;">
                          <button class="btn btn-default" data-target="#read-request-form" data-toggle="modal" style="float: right;color: white; background-color: #080743; font-size: 14px; width: 80px;" wire:click="read('{{ $disapproved_request->form_type }}', {{ $disapproved_request->id }})">Read</button>
                      </td>
                  </table>
              </div>
          </div>
      </div>
  @endforeach
</div>