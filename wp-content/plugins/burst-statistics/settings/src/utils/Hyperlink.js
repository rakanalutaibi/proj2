const Hyperlink = ( props ) => {
    let label_pre = '';
    let label_post = '';
    let link_text = '';
    if ( -1 !== props.text.indexOf( '%s' ) ) {
        let parts = props.text.split( /%s/ );
        label_pre = parts[0];
        link_text = parts[1];
        label_post = parts[2];
    } else {
        link_text = props.text;
    }
    let className = props.className ? props.className : 'burst-link';
    return (
        <>{ label_pre } <a className={className} target={props.target} href={props.url}>{link_text}</a>{label_post}</>
    );
};
export default Hyperlink;
