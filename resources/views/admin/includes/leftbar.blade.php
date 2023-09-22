   <!-- ########## START: LEFT PANEL ########## -->
   <div class="br-logo"><a href=""><span>[</span>Akij  <i>Group</i><span>]</span></a></div>
   <div class="br-sideleft sideleft-scrollbar">
       <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
       <ul class="br-sideleft-menu">
           <li class="br-menu-item">
               <a href="{{ route('dashboard') }}" class="br-menu-link active">
                   <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                   <span class="menu-item-label">Dashboard</span>
               </a><!-- br-menu-link -->
           </li><!-- br-menu-item -->
           <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info"> Manage Student</label>

           <li class="br-menu-item">
               <a href="#" class="br-menu-link with-sub">
                <i class="fas fa-user-graduate"></i> 
                   <span class="menu-item-label">Student</span>
               </a>
               <ul class="br-menu-sub">
                   <li class="sub-item"><a href="{{route('student.add')}}" class="sub-link">Add Student</a></li>
                   <li class="sub-item"><a href="{{route('student.list')}}" class="sub-link">Manage Student</a></li>
               </ul>
           </li>

       </ul><!-- br-sideleft-menu -->

       <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>
       <li class="br-menu-item">
        <a href="{{ route('systemInfo') }}" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-settings tx-24"></i>
            <span class="menu-item-label">System Information</span>
        </a><!-- br-menu-link -->
        <li class="br-menu-item">
            <a href="{{ route('optimize') }}" class="br-menu-link">
                <i class="fas fa-broom"></i>
                <span class="menu-item-label">System Optimize</span>
            </a><!-- br-menu-link -->
        </li>
        
        
        
        
        
    </li><!-- br-menu-item -->

       <br>
   </div><!-- br-sideleft -->
   <!-- ########## END: LEFT PANEL ########## -->
