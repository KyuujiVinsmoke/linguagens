package Aula06;

public class ControleRemoto implements Controlador
{
    private int volume;
    private boolean ligado;
    private boolean tocando;

    public ControleRemoto() 
    {
        this.setVolume(50);
        this.setLigado(true);;
        this.setTocando(false);;
    }

    @Override
    public void ligar() 
    {
        this.setLigado(true);
    }

    @Override
    public void desligar() 
    {
        this.setLigado(false);
    }

    @Override
    public void abrirMenu() 
    {
        System.out.println("--------- MENU ---------");
        System.out.println("Está ligado? "+ this.isLigado());
        System.out.println("Está tocando? "+ this.isTocando());
        System.out.print("Volume: "+ this.getVolume());

        for(int i = 0; i <= this.getVolume(); i += 10)
        {
            System.out.print("|");
        }

        System.out.println("");
    }

    @Override
    public void fecharMenu() 
    {
        System.out.println("Fechar menu...");
    }

    @Override
    public void maisVolume() 
    {
        if(this.isLigado())
        {
            this.setVolume(this.getVolume() + 5);
        }

        else
        {
            System.out.println("Impossível aumentar o volume");
        }
    }

    @Override
    public void menosVolume() 
    {
        if(!this.isLigado())
        {
            this.setVolume(this.getVolume() - 5);
        }

        else
        {
            System.out.println("Impossível diminuir o volume");
        }
    }

    @Override
    public void ligarMudo() 
    {
        if(this.isLigado() && this.getVolume() > 0)
        {
            this.setVolume(0);
        }
    }

    @Override
    public void desligarMudo() 
    {
        if(this.isLigado() && this.getVolume() > 0)
        {
            this.setVolume(50);
        }
    }

    @Override
    public void play() 
    {
        if(this.isLigado() && !(this.isTocando()))
        {
            this.setTocando(true);
        }

        else
        {
            System.out.println("Não consegui reproduzir");
        }
    }

    @Override
    public void pause() 
    {
        if(this.isLigado() && this.isTocando())
        {
            this.setTocando(false);
        }

        else
        {
            System.out.println("Não consegui pausar");
        }
    }

    public int getVolume() 
    {
        return volume;
    }

    public void setVolume(int volume) 
    {
        this.volume = volume;
    }

    public boolean isLigado() 
    {
        return ligado;
    }

    public void setLigado(boolean ligado) 
    {
        this.ligado = ligado;
    }

    public boolean isTocando() 
    {
        return tocando;
    }

    public void setTocando(boolean tocando) 
    {
        this.tocando = tocando;
    }
}