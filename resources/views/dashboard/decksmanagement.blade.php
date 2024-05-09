@extends('layouts.default')
@section('content')



    <div class="main-container d-flex">
        @include('layouts/sidebar')
        <div class="content">
          <div class="container-xl">
            <div class="table-responsive">
              <div class="table-wrapper">
                <div class="table-title">
                  <div class="col">
                    <div class="col-sm-1">
                    </div>
                    <div class="button-container">
                      <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"  style="margin-right: 10px;" ><i
                              class="material-icons">&#xE147;</i> <span>Add</span></a>
                      <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"  style="margin-left: 10px;"><i
                              class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                  </div>
                    </div>						
                    </div>
                  </div>
                </div>

                <table class="table custom-table">
          <thead>
            <tr>  

              <th scope="col">
                <label class="control control--checkbox">
                  <input type="checkbox"  class="js-check-all"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <th scope="col">Content</th>
              <th scope="col">Description</th>
              <th scope="col">Created Date</th>
            </tr>
          </thead>
          <tbody>
            <tr scope="row">
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              <td>
                1392
              </td>
              <td>James Yates</a></td>
              <td>
                Web Designer
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr class="active">
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox" checked="" />
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <td>4616</td>
              <td>Matthew Wasil</a></td>
              <td>
                Graphic Designer
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <td>9841</td>
              <td>Sampson Murphy</></td>
              <td>
                Mobile Dev
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <td>9548</td>
              <td>Gaspar Semenov</a></td>
              <td>
                Illustrator
                <small class="d-block">Far far away, behind the word mountains</small>
              </td>
            </tr>
            
          </tbody>
        </table>
                {{-- <div class="clearfix">
                  <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                  <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                  </ul>
                </div> --}}
              </div>
            </div>        
          </div>
          <!-- Edit Modal HTML -->
          <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">						
                    <h4 class="modal-title">Add</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">					
                    <div class="form-group">
                      <label>Content</label>
                      <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Date Created</label>
                      <input type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Deck</label>
                      <textarea class="form-control" required></textarea>
                    </div>			
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Edit Modal HTML -->
          <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">						
                    <h4 class="modal-title">Edit Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">					
                    <div class="form-group">
                      <label>Content</label>
                      <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Date Created</label>
                      <input type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Deck</label>
                      <textarea class="form-control" required></textarea>
                    </div>				
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Delete Modal HTML -->
          <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">						
                    <h4 class="modal-title">Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">					
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                  </div>
                </form>
              </div>
            </div>
          </div>
              </div>
        </div>
        
@endsection

<style>
    .content {
        background: #F8F1F1;
    }
    .button-container {
        margin-top: 40px;
        margin-bottom: 100px;

    }
</style>





