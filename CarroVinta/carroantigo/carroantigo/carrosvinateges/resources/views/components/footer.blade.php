<!-- resources/views/components/footer.blade.php -->
<footer class="bg-dark text-white mt-auto" style="background: linear-gradient(to right, #1f2937, #374151, #6b7280) !important;">
    <div class="container py-5">
        <div class="row">
            <!-- Logo e Descrição -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="d-flex align-items-center mb-3">
                    <span class="text-white fw-bold fs-3">Impala's King</span>
                </div>
                <p class="text-light mb-4">
                    Impala's King do Brasil © 2025 — Veículos em conformidade com o Programa de Controle da Poluição do Ar. Venda de modelos zero km somente via concessionárias Old Blood. Imagens ilustrativas. Preços podem variar por Estado. Todos os direitos reservados.
                </p>
                <div class="d-flex gap-3">
                    <!-- Redes Sociais -->
                    <a href="#" class="text-light hover-primary" style="transition: color 0.3s;">
                        <span class="visually-hidden">Facebook</span>
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <a href="#" class="text-light hover-primary" style="transition: color 0.3s;">
                        <span class="visually-hidden">Instagram</span>
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="#" class="text-light hover-primary" style="transition: color 0.3s;">
                        <span class="visually-hidden">Twitter</span>
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="#" class="text-light hover-primary" style="transition: color 0.3s;">
                        <span class="visually-hidden">GitHub</span>
                        <i class="fab fa-github fa-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Links Rápidos -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-3 col-6 mb-4">
                        <h5 class="text-uppercase text-light mb-3">Soluções</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Marketing</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Análises</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Comércio</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Insights</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <h5 class="text-uppercase text-light mb-3">Suporte</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Preços</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Documentação</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Guias</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">API Status</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <h5 class="text-uppercase text-light mb-3">Empresa</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Sobre</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Blog</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Empregos</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Imprensa</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <h5 class="text-uppercase text-light mb-3">Legal</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Privacidade</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Termos</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Cookies</a></li>
                            <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-primary">Licenças</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-top border-secondary pt-4 mt-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-light mb-0">
                        &copy; {{ date('Y') }} Impala's King. Todos os direitos reservados.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex gap-4 justify-content-md-end justify-content-start mt-2 mt-md-0">
                        <a href="#" class="text-light text-decoration-none hover-primary">Privacidade</a>
                        <a href="#" class="text-light text-decoration-none hover-primary">Termos</a>
                        <a href="#" class="text-light text-decoration-none hover-primary">Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hover-primary:hover {
            color: #3498db !important;
        }
    </style>
</footer>