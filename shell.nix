{ pkgs ? import <nixpkgs> {} }:

with pkgs;

mkShell {
  buildInputs = [
    (pkgs.php.buildEnv {
      extensions = ({ enabled, all }: enabled ++ (with all; [
        xdebug
        ds
        redis
      ]));
      extraConfig = ''
      xdebug.mode=debug
    '';
    }).packages.composer
    # pkgs.php
    # pkgs.phpExtensions.redis
    # pkgs.phpExtensions.ds
  ];
}
