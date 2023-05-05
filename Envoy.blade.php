@servers(['web' => '34.175.158.123'])

@task('deploy')
    cd c:/xampp/htdocs/EcommerceFurniture
    git pull origin master
@endtask
