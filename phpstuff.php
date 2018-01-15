<?php
//role based navigation rendering
function nav($role){
        $e = '';
        $linkBank = [
                ['link'=>'user_leads&id='.$_SESSION['user_id'],'title'=>'My Leads','access'=>[1,2,3]],
                ['link'=>'sectors','title'=>'Sectors','access'=>[1,2,3]],
                ['link'=>'sources','title'=>'Sources','access'=>[1,2,3]],
                ['link'=>'new_lead','title'=>'New Lead','access'=>[1,2,3]],
                ['link'=>'all_leads','title'=>'All Leads','access'=>[1,2]],
                ['link'=>'new_entry','title'=>'Demo Entry','access'=>[1,2,3]],
                ['link'=>'users','title'=>'Users','access'=>[1]],
                ['link'=>'reports','title'=>'Reports','access'=>[1]],
                ['link'=>'logout','title'=>'Logout','access'=>[1,2,3]],
        ];
        $e.='<div class="nav">';
        foreach($linkBank as $link){
                if(in_array($role,$link['access'])){
                        $e.='
                                <a href="?p='.$link['link'].'"><button class="nav-button">'.$link['title'].'</button></a>
                        ';
                }
        }
        $e.='</div>';
        return $e;
}
