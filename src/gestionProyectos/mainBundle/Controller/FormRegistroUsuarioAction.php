<?php

use Symfony\Component\HttpFoundation\Request;

class FormRegistroUsuarioVerifier extends Controller {

    public function RegistroUsuarioVerifierAction(Request $request) {
        $form->handleRequest($request);
        if ($form->isValid()) {
            $status = "Formulari vàlid";
//enviem les dades a la vista per visualitzar-les
            $data = array(
            'nom' => $form->get('nom')->getData(),
            'password' => $form->get('password')->getData()
            );
        } else {
            $status = null;
            $data = null;
        }
    }

}
