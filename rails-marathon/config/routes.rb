Rails.application.routes.draw do
  resources :houses, only: [:new, :create, :show]
end
