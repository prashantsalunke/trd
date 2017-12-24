export class SubAdmin {
    id:number;
    username:string='';
    security_code:string='';
    password:string='';
    email?:string='';
    profile_image?:ByteString='';
    online_status?:number=0;
    is_suspended?:number=0;
    is_deleted?:number=0;
    created_by?:string='';
    created_at?:Date;
    modified_by?:string;
    modified_at?:Date;
    permissions:Permissions
}

export class Permissions {
    id:number;
    admin_user_id:number;
    as_admin:number=0;
    manage_sub_admin:number=0;
    manage_member:number=0;
    manage_carousel:number=0;
    audit:number=0;
    chat:number=0;
    view_errors:number=0;
    statistic:number=0;
    account_alarm:number=0;
    created_at?:Date    
}
    
export const PermissionsArray =  ['as_admin',
'manage_sub_admin','manage_member', 'manage_carousel','audit','chat',
'view_errors','statistic','account_alarm'];