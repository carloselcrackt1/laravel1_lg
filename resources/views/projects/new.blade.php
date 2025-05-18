class ProyectoController extends ProyectoController{
    public function new(){

        echo("hola");
        $proyectos=DB::table('proyectos')->get();
        return view('projects/new',['proyectos' => $proyectos]);
    }
}