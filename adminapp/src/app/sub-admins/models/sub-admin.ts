export class SubAdmin {
    id:number;
    username:string='';
    security_code:string='';
    password:string='';
    email?:string='';
    profile_image?:ByteString='';
    online_status?:boolean=!1;
    is_suspended?:boolean=!1;
    is_deleted?:boolean=!1;
    created_by?:string='';
    created_at?:Date;
    modified_by?:string;
    modified_at?:Date;
    permissions:Permissions
}

export class Permissions {
    id:number;
    admin_user_id:number;
    as_admin:boolean=!1;
    manage_sub_admin:boolean=!1;
    manage_member:boolean=!1;
    manage_carousel:boolean=!1;
    audit:boolean=!1;
    chat:boolean=!1;
    view_errors:boolean=!1;
    statistic:boolean=!1;
    account_alarm:boolean=!1;
    created_at?:Date    
}
    
export const PermissionsArray =  ['as_admin',
'manage_sub_admin','manage_member', 'manage_carousel','audit','chat',
'view_errors','statistic','account_alarm'];